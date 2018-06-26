import MySQLdb
import serial
import datetime
prev=""
flag=0;
b=serial.Serial('COM5',9600)
conn=MySQLdb.connect("localhost","root","","parking")
#a=serial.Serial('COM3',9600)
cursor=conn.cursor()
while True:
    l=''
    x=b.read()
    if(x=='*'):
        y=b.read()
        while(y!='#'):
            l=l+y
            y=b.read()

        print l
        if l==prev:
            flag=1
        prev=l
        print flag
        if flag==0:
            t0 = datetime.datetime.now()
 
            cursor.execute("""INSERT into rfid VALUES('%s')""" %(l))
            conn.commit()
            cursor.execute("""UPDATE charge set cost=0""")
            conn.commit()
        elif flag==1:
            cursor.execute("""UPDATE stats set slot1=0""")
            #cursor.execute("SELECT*from rfid where x=slot")
            conn.commit()
            cursor.execute("""DELETE from rfid""")
            conn.commit()
            t1 = datetime.datetime.now()
            et = t1-t0
            a = divmod(et.total_seconds(),60)
            cost = a[1] * 5
            cursor.execute("""UPDATE charge set cost='%d'""" %cost)
            conn.commit()
            flag=0
            prev=""
            #b.close()
''' while True:
       y=b.read()

       if(b.read=='^'):
           if(b.read=='%'):
             h=b.read()
             if(h=='low'):
                 cursor.execute("""UPDATE irstats SET slot1=0""")
                 
             else:
                 cursor.execute("""UPDATE irstats SET slot1=1""")
                 
             conn.commit()
             b.close()
             conn.close()
'''
