#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#include "HX711.h" // Incluir la librería HX711

#define DT 2       // a pin digital 2
#define SCK 3      // a pin digital 3

HX711 celda;      

LiquidCrystal_I2C lcd(0x27, 16, 2);

void setup() {
  Serial.begin(9600); 
  Serial.println("Balanza con celda de carga"); 

  celda.begin(DT, SCK); 
  celda.set_scale(2213.f); // Establece el factor de escala obtenido del primer programa
  celda.tare(
    
  ); // Realiza la tara o puesta a cero

  // Inicia la pantalla LCD con los parámetros necesarios
  lcd.begin(16, 2); // Número de columnas y filas del LCD
  // Enciende la luz de fondo
  lcd.backlight();
  // Escribe el mensaje en la primera línea
  lcd.setCursor(0, 0);
  lcd.print("Valor (gramos):");
}

void loop() {
  float weight = celda.get_units(10); // Obtener el promedio de 10 lecturas

  Serial.print("Valor (gramos): "); 
  lcd.setCursor(0, 1); 
  // Verificar si el peso es negativo o muy pequeño (considerado como no hay objeto)
  if (weight < 0) {
    Serial.println(0, 1); // Mostrar 0 si el valor es negativo o muy pequeño
    lcd.print("0.0          "); 
  } else {
    Serial.println(weight, 1); // Muestra el valor obtenido
    lcd.print(weight, 1); // Muestra el valor en el LCD
    lcd.print("          "); // Espacios para limpiar caracteres restantes
  }

  celda.power_down(); // Apaga el módulo HX711
  delay(3000); 
  celda.power_up(); // Despierta al módulo HX711
}
