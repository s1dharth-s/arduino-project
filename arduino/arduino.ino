int count = 0;
int irsensor1=12;
int irsensor2=10;
void setup()
{
  Serial.begin(9600);
  pinMode(irsensor1 , INPUT);
  pinMode(irsensor2 , INPUT);
}
void loop()
{
  if(Serial.available())
  {
    count = 0; // Reset count to zero// Keep reading Byte by Byte from the Buffer till the Buffer is empty
    {
      char input = Serial.read();
      Serial.print(input);
      count++; //
      Serial.write('*');
      Serial.write(input);
      Serial.write('#');
      
    }
  Serial.println();
  }

//iR1
  
    int readsen1 = digitalRead( irsensor1 );
    Serial.print("\nPIN12");
    Serial.print(readsen1);
    delay(1000);  
       int readsen2 = digitalRead( irsensor2 );
    Serial.print("\nPIN10");
    Serial.print(readsen2);
    delay(1000);      
/*    if( readsen1 == 1 )
     {
       Serial.write('^');
       Serial.write("1high");
       Serial.write('%');
       Serial.println("high1");
     }
else
     { Serial.write('^');
       Serial.write("1low");
       Serial.write('%');
         Serial.println("low1");
      }
        
   //iR2     
        
       int readsen2 = digitalRead( irsensor2 );
       if( readsen2 == 1 )
     {
      Serial.write('^');
       Serial.write("2high");
       Serial.write('%');
         Serial.println("high2");
     }
else
     {
        Serial.write('^');
       Serial.write("2low");
       Serial.write('%');
         Serial.println("low2");
      }*/
}
