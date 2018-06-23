import MySQLdb
import serial
import time
b=serial.Serial('COM9',9600)
conn=MySQLdb.connect( host="localhost",user="root",passwd="",db="proj")
#a=serial.Serial('COM9',9600)
cursor=conn.cursor()
while True:
    x=b.read()

    if(b.read=='*'):
        if(b.read=='#'):
            f=b.read()
            cursor.execute("SELECT*from rfid where x=slot")
            conn.commit()
            b.close()
while True:
       y=b.read()

       if(b.read=='^'):
           if(b.read=='%'):
             h=b.read()
             if(h=='LOW'):
                 cursor.execute("""UPDATE irstats SET slot1=0""")
                 cursor.execute("""UPDATE irstats SET slot2=0""")
                 cursor.execute("""UPDATE irstats SET slot3=0""")
                 cursor.execute("""UPDATE irstats SET slot4=0""")
             else:
                 cursor.execute("""UPDATE irstats SET slot1=1""")
                 cursor.execute("""UPDATE irstats SET slot2=1""")
                 cursor.execute("""UPDATE irstats SET slot3=1""")
                 cursor.execute("""UPDATE irstats SET slot4=1""")
             conn.commit()
             b.close()
             conn.close()
