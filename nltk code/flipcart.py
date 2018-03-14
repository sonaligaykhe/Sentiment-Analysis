import bs4 as bs 
import urllib.request
import requests
from bs4 import BeautifulSoup
import xlwt
from string import ascii_lowercase





def get_review(url,sheet,wb):
    
    sheet = wb.add_sheet(sheet)
    web = requests.get(url).text
    ws=BeautifulSoup(web,'lxml')

    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('div',class_='_1SFrA2')
        if(x!=None):
            if(len(x)>0):
                break
    mob_name=x[0].text
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('div',class_='_1SFrA2')
        if(x!=None):
            if(len(x)>0):
                break
    mob_size=((x[0].text).split(' '))[4]
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('div',class_='_1vC4OE')
        if(x!=None):
            if(len(x)>0):
                break
    mob_price=x[0].text.split(' ')[0]
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        x=ws.findAll('span',class_='_2_KrJI')
        if(x!=None):
            if(len(x)>0):
                break
    mob_star=(x[0]).text.split(' ')
    mob_star=mob_star[0]
    
    print(mob_name)
    print(mob_size)
    print(mob_price)
    print(mob_star)

    #print(ws.prettify())



    print(sheet)
    sheet.write(0,0,mob_name)
    sheet.write(0,1,mob_size)
    sheet.write(0,2,mob_price)
    sheet.write(0,3,mob_star)




        #####################################################################################


    res1=ws.findAll('div',class_='row _3wYu6I _3BRC7L')
    while True:
        web = requests.get(url).text
        ws=BeautifulSoup(web,'lxml')            
        res1=ws.findAll('div',class_='row _3wYu6I _3BRC7L')
        if(res1!=None):
            if(len(res1)>0):
                break
    res1=res1[0]

        #rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
        #print(rev_src.get('href'))

    i=1
    j=0
    while(j<10):
        reviews=list(map(lambda x:x.text,res1.find_all('div',class_='qwjRop')))
        for t1 in reviews:
            sheet.write(i,0,t1)
            i+=1


        for l1 in ws.find_all('div',class_='_2kUstJ'):
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
                  
        res1=ws.findAll('div',class_='row _3wYu6I _3BRC7L')
        while True:
            web = requests.get(url).text
            ws=BeautifulSoup(web,'lxml')            
            res1=ws.findAll('div',class_='row _3wYu6I _3BRC7L')
            if(res1!=None):
                if(len(res1)>0):
                    break
        print(len(res1))
        res1=res1[0]
        j+=1
        wb.save('flip.xls')


wb=xlwt.Workbook()

path=[ "https://www.flipkart.com/lenovo-k8-note-venom-black-64-gb/product-reviews/itmfffjqd3v8mgts?pid=MOBFY635GPZNCZY8"]

mysheets=['lenovo k8']

for p in range(0,len(path)):
    print(path[p])
    get_review(path[p],mysheets[p],wb)







'''

url= "https://www.flipkart.com/redmi-note-4-black-64-gb/product-reviews/itmeqe48766xqzb7?pid=MOBEQ98TABTWXGTD"
web = requests.get(url).text
ws=BeautifulSoup(web,'lxml')
#print(ws.prettify())

res1=ws.find('div')



i=0
for t1 in res1.find_all('br'):
    print(t1.text)
    #sheet2.write(i,0,t1.text)
    i+=1



wb=xlwt.Workbook()
sheet2=wb.add_sheet('Sheet2')


mob_name=ws.find('div',class_='_1SFrA2')
print(mob_name.text)
sheet2.write(0,0,mob_name.text)


mob_size=ws.find('div',class_='_1SFrA2').text.split(' ')
#mob_size1=mob_size[4]
print(mob_size[4])
sheet2.write(0,1,mob_size1[4])

mob_price=ws.find('div',class_='_1vC4OE').text.split(' ')
print(mob_price[0])
sheet2.write(0,2,mob_price[0])

mob_star=ws.find('span',class_='_2_KrJI').text.split(' ')
print(mob_star[0])
sheet2.write(0,3,mob_star[0])




#####################################################################################


res1=ws.find('div',class_='row _3wYu6I _3BRC7L')

#rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
#print(rev_src.get('href'))

i=1
j=0
while(j<11):
    for t1 in res1.find_all('div',class_='qwjRop'):
        #print(t1.text)
        sheet2.write(i,0,t1.text)
        i+=1


    wb.save('rev.xls')


    for l1 in ws.find_all('div',class_='_2kUstJ'):
    #l1=link.split('/')
        for l2 in l1.find_all('a'):
            print(l2.get('href'))
            url="https://www.flipkart.com"+l2.get('href')
            web = requests.get(url).text
            ws=BeautifulSoup(web,'lxml')
            
    res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')
    j+=1
    

'''
