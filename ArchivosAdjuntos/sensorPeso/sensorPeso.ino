#include "HX711.h" 

#define DT 2       // DT de HX711 a pin digital 2
#define SCK 3      // SCK de HX711 a pin digital 3

HX711 celda;     

void setup() {
  Serial.begin(9600);
  Serial.println("Balanza con celda de carga"); 

  celda.begin(DT, SCK); 

  celda.set_scale(2213.f); 
  celda.tare(); // realiza la tara o puesta a cero
}

void loop() {
  float weight = celda.get_units(10); // obtener el promedio de 10 lecturas
  
  Serial.print("Valor (gramos): "); 
  // Verificar si el peso es negativo o muy pequeño (considerado como no hay objeto)
  if (weight < 0) {
    Serial.println(0, 1); // Mostrar 0 si el valor es negativo o muy pequeño
  } else {
    Serial.println(weight, 1); // muestra el valor obtenido
  }
  
  celda.power_down(); 
  delay(3000); // demora de 3 segundos
  celda.power_up(); 
}
