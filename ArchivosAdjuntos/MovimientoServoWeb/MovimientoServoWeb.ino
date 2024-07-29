#include <WiFi.h>
#include <WebServer.h>
#include <ESP32Servo.h>

// Credenciales WiFi
const char* ssid = "Redmi 10C";
const char* password = "12345678";

WebServer server(80);

// Definir los pines para los servomotores
#define SERVO_BASE_PIN 13
#define SERVO_ANTEBRAZO_PIN 12
#define SERVO_CODO_PIN 14
#define SERVO_MUNECA_PIN 27
#define SERVO_PINZA_PIN 26

// Crear objetos Servo
Servo servoBase;
Servo servoAntebrazo;
Servo servoCodo;
Servo servoMuneca;
Servo servoPinza;

void setup() {
  Serial.begin(115200);

  // Conectar a WiFi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Conectando a WiFi...");
  }
  Serial.println("Conectado a WiFi");
  Serial.print("Dirección IP: ");
  Serial.println(WiFi.localIP());

  // Adjuntar servos a los pines
  servoBase.attach(SERVO_BASE_PIN);
  servoAntebrazo.attach(SERVO_ANTEBRAZO_PIN);
  servoCodo.attach(SERVO_CODO_PIN);
  servoMuneca.attach(SERVO_MUNECA_PIN);
  servoPinza.attach(SERVO_PINZA_PIN);

  // Configurar rutas del servidor
  server.on("/", handleRoot);
  server.on("/setServo", HTTP_GET, handleSetServo);

  // Iniciar servidor
  server.begin();
  Serial.println("Servidor HTTP iniciado");
}

void loop() {
  server.handleClient();
}

void handleRoot() {
  String html = "<html><head>";
  html += "<title>Control de Servomotores</title>";
  html += "<meta name='viewport' content='width=device-width, initial-scale=1'>";
  html += "<style>";
  html += "body { font-family: Arial, sans-serif; text-align: center; }";
  html += ".slider-container { margin: 20px 0; }";
  html += "input[type='range'] { width: 80%; }";
  html += "</style>";
  html += "</head><body>";
  html += "<h1>Control de Servomotores</h1>";

  String servoNames[] = {"Base", "Antebrazo", "Codo", "Muñeca", "Pinza"};
  for (int i = 1; i <= 5; i++) {
    html += "<div class='slider-container'>";
    html += "<label for='servo" + String(i) + "'>Servo " + servoNames[i-1] + ": </label>";
    if (i == 3 || i == 4) {
      html += "<input type='range' id='servo" + String(i) + "' min='0' max='90' value='45' oninput='updateServo(" + String(i) + ", this.value)'>";
      html += "<span id='value" + String(i) + "'>45</span>";
    } else {
      html += "<input type='range' id='servo" + String(i) + "' min='0' max='180' value='90' oninput='updateServo(" + String(i) + ", this.value)'>";
      html += "<span id='value" + String(i) + "'>90</span>";
    }
    html += "</div>";
  }

  html += "<script>";
  html += "function updateServo(servo, value) {";
  html += "  document.getElementById('value' + servo).innerHTML = value;";
  html += "  var xhr = new XMLHttpRequest();";
  html += "  xhr.open('GET', '/setServo?servo=' + servo + '&angle=' + value, true);";
  html += "  xhr.send();";
  html += "}";
  html += "</script>";
  html += "</body></html>";

  server.send(200, "text/html", html);
}

void handleSetServo() {
  String servoParam = server.arg("servo");
  String angleParam = server.arg("angle");

  if (servoParam != "" && angleParam != "") {
    int servo = servoParam.toInt();
    int angle = angleParam.toInt();

    if (servo >= 1 && servo <= 5) {
      if ((servo == 3 || servo == 4) && angle >= 0 && angle <= 90) {
        moveServo(servo, angle);
        server.send(200, "text/plain", "OK");
      } else if ((servo == 1 || servo == 2 || servo == 5) && angle >= 0 && angle <= 180) {
        moveServo(servo, angle);
        server.send(200, "text/plain", "OK");
      } else {
        server.send(400, "text/plain", "Ángulo inválido");
      }
    } else {
      server.send(400, "text/plain", "Servo inválido");
    }
  } else {
    server.send(400, "text/plain", "Faltan parámetros");
  }
}

void moveServo(int servoNum, int angle) {
  switch (servoNum) {
    case 1:
      servoBase.write(angle);
      break;
    case 2:
      servoAntebrazo.write(angle);
      break;
    case 3:
      servoCodo.write(angle);
      break;
    case 4:
      servoMuneca.write(angle);
      break;
    case 5:
      servoPinza.write(angle);
      break;
  }
  Serial.printf("Servo %d (%s) movido a %d grados\n", servoNum, getServoName(servoNum), angle);
}

String getServoName(int servoNum) {
  switch (servoNum) {
    case 1: return "Base";
    case 2: return "Antebrazo";
    case 3: return "Codo";
    case 4: return "Muñeca";
    case 5: return "Pinza";
    default: return "Desconocido";
  }
}