import pymysql
conn = pymysql.connect(host='192.168.0.22',user='admin',password='password',db='project')
a=conn.cursor()

row=a.execute("select * from allproduct")
print(row[0])
conn.commit()
