import bs4 as bs 
import urllib.request
import requests
from bs4 import BeautifulSoup
import xlwt
from string import ascii_lowercase


path="https://www.flipkart.com/lenovo-k8-note-venom-black-64-gb/product-reviews/itmfffjqd3v8mgts?page=1&pid=MOBFY635GPZNCZY8"
web = requests.get(path).text
ws=BeautifulSoup(web,'lxml')

wb=xlwt.Workbook()
sheet1=wb.add_sheet('Sheet1')


#res=ws.find_all('div')
#print(res.text)

res1=ws.find('div',class_='_2kUstJ')
print(res1.text)
res2=res1.find('a')
print(res2.text)


'''
print("there")

res1=ws.find_all('div',class_='_2kUstJ')
print(res1.text)
res2=res1.find_all('a')
print(res2.text)

for l1 in ws.find_all('div',class_='_2kUstJ'):
     print("here")
     flag=False
     for l2 in l1.find_all('a'):
         print(l2.get('href'))
         url="https://www.flipkart.com"+l2.get('href')
         web = requests.get(url).text
         ws=BeautifulSoup(web,'lxml')
         flag=True
         break
         if flag==True:
            break
'''






#res1=ws.find('div',class_='qwjRop')   ws.find_all('li',class_='_1mO8v9'):
#for p in ws.find_all('div',class_='_1JKxvj _1vKM3Y'):
#    print(p)

#print(ws.find_all('div',class_='_1JKxvj _1vKM3Y'))

res=ws.find('div',class_='qwjRop')
print(res.text)

'''
i=1
j=0
while(j<11):
    print(j)
    x=ws.find_all('div',class_='qwjRop')
    while x==[]:
        path="https://www.flipkart.com/lenovo-k8-note-venom-black-64-gb/product-reviews/itmfffjqd3v8mgts?page=1&pid=MOBFY635GPZNCZY8"
        web = requests.get(path).text
        ws=BeautifulSoup(web,'lxml')
        print('alach nahi')
        x=ws.find_all('div',class_='qwjRop')

    for p in x:
        print("gffgfhgfftyftydtrdtfhgvkujgyugtyctrrerrtrfcgviu")
        sheet1.write(i,0,p.text)
        i+=1

    wb.save('flip.xls')

    url="https://www.flipkart.com/lenovo-k8-note-venom-black-64-gb/product-reviews/itmfffjqd3v8mgts?page="+str(j+1)+"&pid=MOBFY635GPZNCZY8"
    print(url)
    web = requests.get(url).text
    ws=BeautifulSoup(web,'lxml')
                
    #res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')
    j+=1




while True:
    web = requests.get(path).text
    ws=BeautifulSoup(web,'lxml')            
    res1=res.find_all('div',class_='qwjRop')
    if(res1!=None):
        if(len(res1)>0):
            break
    #print(len(res1))
    print("chalu ahe ")


res1=res1[0]
print(res1.text)
'''
