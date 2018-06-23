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
    if(count==0){
         Serial.write('*');
         count++;
    }
  if(count==12) {
    Serial.write(Serial.read());
    Serial.println('#');
    count=0;}
  else{
    Serial.write(Serial.read());
    count++;
  }

  }

/*/iR1
  
    int readsen1 = digitalRead( irsensor1 );
     Serial.write('^');
     {
       if( readsen1 == HIGH )
     {
       Serial.write("high");
     }
else
     { 
       Serial.write("low");
     
      }
 
      Serial.write('%');
      Serial.println();
     }
        
   //iR2     
        
       int readsen2 = digitalRead( irsensor2 );
      Serial.write("^2");
      {
       if( readsen2 == HIGH )
     {
       Serial.write("high");
      
       
     }
else
     {
       Serial.write("low");
    
      }
     Serial.write("%2");
        Serial.println();
}*/
}
