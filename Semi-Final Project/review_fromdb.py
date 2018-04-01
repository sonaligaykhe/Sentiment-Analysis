import xlrd 
from xlwt import Workbook
import pymysql
import Transformation_Module as s

'''
conn = pymysql.connect(host='192.168.0.22',user='admin',password='password',db='project')
a=conn.cursor()
a.execute("select * from review")
row=a.fetchall()

for i in row:
    res=s.sentiment(i[3])

    name1=i[0]
    a.execute("select * from mobileinfo where name=name1")
    result=a.fetchall()
    
    if(res=='pos'):
        count=result[4]
        count=count+1
        a.execute("upadte mobileinfo set pos=count where name=name1")
        
    elif(res=='neg')
        count=result[5]
        count=count+1
        a.execute("upadte mobileinfo set neg=count where name=name1")
    else
        count=result[6]
        count=count+1
        a.execute("upadte mobileinfo set mix=count where name=name1")

conn.close()

'''



conn = pymysql.connect(host='192.168.0.22',user='admin',password='password',db='project')
a=conn.cursor()


#a.execute("insert into mobileinfo (name,price,rating,link,pos,neg,mix,camera,battery,processor,ram,memory,image) values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",(name,price,rating,link,pos,neg,mix,0,0,0,0,0,0))
result = [0,0,0,0,0]    
    

result[0]=1
result[1]=2
result[2]=3
result[3]=4
result[4]=5


pname = "Moto G5s Plus"

a.execute ("""
UPDATE mobileinfo
SET camera=%s, battery=%s, processor=%s, ram=%s, memory=%s
WHERE name=%s
""", (result[0], result[1], result[2], result[3], result[4], pname))

conn.commit()
conn.close()
