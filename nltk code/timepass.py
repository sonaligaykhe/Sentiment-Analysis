import bs4 as bs
import urllib.request
import requests
from bs4 import BeautifulSoup
import xlwt
from string import ascii_lowercase


wb=xlwt.Workbook()
sheet1=wb.add_sheet('Redmi4')
sheet2=wb.add_sheet('One plus 5t')
sheet3=wb.add_sheet('Moto G5plus')
sheet4=wb.add_sheet('Samsang Galaxy J7')
#sheet5=wb.add_sheet('Moto G5plus')
#sheet6=wb.add_sheet('Moto G5plus')

#1################################AMAZON###################################################################

url= "https://www.amazon.in/Redmi-4-Black-16-GB/product-reviews/B01MT0QKAG/ref=cm_cr_arp_d_paging_btm_1?ie=UTF8&pageNumber=1&reviewerType=all_reviews"
web = requests.get(url).text
ws=BeautifulSoup(web,'lxml')
#print(ws.prettify())


mob_name=ws.find('div',class_='a-row product-title')
#print(mob_name.text)
sheet1.write(0,0,mob_name.text)

mob_size=ws.find('span',class_='a-size-base a-color-secondary').text.split(':')
mob_size1=mob_size[1].split('|')
#print(mob_size1[0])
sheet1.write(0,1,mob_size1[0])

mob_price=ws.find('span',class_='a-color-price arp-price').text.split(' ')
#print(mob_price[0])
sheet1.write(0,2,mob_price[0])

mob_star=ws.find('span',class_='a-icon-alt').text.split(' ')
#print(mob_star[0])
sheet1.write(0,3,mob_star[0])




#####################################################################################


res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')

#rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
#print(rev_src.get('href'))

i=1
j=0
while(j<11):
    if res1!=None:
        allReviews= res1.find_all('div',class_='a-row review-data')
        if allReviews != None:
            for t1 in allReviews:
                #print(t1.text)
                sheet1.write(i,0,t1.text)
                i+=1


        wb.save('rev.xls')


        for l1 in ws.find_all('li',class_='a-last'):
        #l1=link.split('/')
            for l2 in l1.find_all('a'):
                print(l2.get('href'))
                url="https://www.amazon.in"+l2.get('href')
                web = requests.get(url).text
                ws=BeautifulSoup(web,'lxml')
            
    res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')
    if res1!=None:
        j+=1

#2######################################################################################################################################

url= "https://www.amazon.in/OnePlus-Midnight-Black-64GB-memory/product-reviews/B0756ZFXVB/ref=cm_cr_dp_d_show_all_btm?ie=UTF8&reviewerType=all_reviews"
web = requests.get(url).text
ws=BeautifulSoup(web,'lxml')
#print(ws.prettify())




mob_name=ws.find('div',class_='a-row product-title')
#print(mob_name.text)
sheet2.write(0,0,mob_name.text)

mob_size=ws.find('span',class_='a-size-base a-color-secondary').text.split(':')
mob_size1=mob_size[1].split('|')
#print(mob_size1[0])
sheet2.write(0,1,mob_size1[0])

mob_price=ws.find('span',class_='a-color-price arp-price').text.split(' ')
#print(mob_price[0])
sheet2.write(0,2,mob_price[0])

mob_star=ws.find('span',class_='a-icon-alt').text.split(' ')
#print(mob_star[0])
sheet2.write(0,3,mob_star[0])




#####################################################################################


res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')

#rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
#print(rev_src.get('href'))

i=1
j=0
while(j<11):
    for t1 in res1.find_all('div',class_='a-row review-data'):
        #print(t1.text)
        sheet2.write(i,0,t1.text)
        i+=1


    wb.save('rev.xls')


    for l1 in ws.find_all('li',class_='a-last'):
    #l1=link.split('/')
        for l2 in l1.find_all('a'):
            print(l2.get('href'))
            url="https://www.amazon.in"+l2.get('href')
            web = requests.get(url).text
            ws=BeautifulSoup(web,'lxml')
            
    res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')
    j+=1
##3###########################################################################################################################################

url= "https://www.amazon.in/Moto-Plus-Lunar-Grey-64GB/product-reviews/B071HWTHPH/ref=cm_cr_dp_d_show_all_btm?ie=UTF8&reviewerType=all_reviews"
web = requests.get(url).text
ws=BeautifulSoup(web,'lxml')
#print(ws.prettify())



mob_name=ws.find('div',class_='a-row product-title')
#print(mob_name.text)
sheet3.write(0,0,mob_name.text)

mob_size=ws.find('span',class_='a-size-base a-color-secondary').text.split(':')
mob_size1=mob_size[1].split('|')
#print(mob_size1[0])
sheet3.write(0,1,mob_size1[0])

mob_price=ws.find('span',class_='a-color-price arp-price').text.split(' ')
#print(mob_price[0])
sheet3.write(0,2,mob_price[0])

mob_star=ws.find('span',class_='a-icon-alt').text.split(' ')
#print(mob_star[0])
sheet3.write(0,3,mob_star[0])




#####################################################################################


res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')

#rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
#print(rev_src.get('href'))

i=1
j=0
while(j<11):
    allReviews= res1.find_all('div',class_='a-row review-data')
    print(allReviews)
    for t1 in allReviews:
        #print(t1.text)
        sheet3.write(i,0,t1.text)
        i+=1


    wb.save('rev.xls')


    for l1 in ws.find_all('li',class_='a-last'):
    #l1=link.split('/')
        for l2 in l1.find_all('a'):
            print(l2.get('href'))
            url="https://www.amazon.in"+l2.get('href')
            web = requests.get(url).text
            ws=BeautifulSoup(web,'lxml')
            
    res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')
    j+=1

##4#####################################################################################################################################
url= "https://www.amazon.in/Samsung-Galaxy-J7-Prime-Offers/product-reviews/B0773R5ZYT/ref=cm_cr_dp_d_show_all_btm?ie=UTF8&reviewerType=all_reviews"
web = requests.get(url).text
ws=BeautifulSoup(web,'lxml')
#print(ws.prettify())




mob_name=ws.find('div',class_='a-row product-title')
#print(mob_name.text)
sheet4.write(0,0,mob_name.text)

mob_size=ws.find('span',class_='a-size-base a-color-secondary').text.split(':')
mob_size1=mob_size[1].split('|')
#print(mob_size1[0])
sheet4.write(0,1,mob_size1[0])

mob_price=ws.find('span',class_='a-color-price arp-price').text.split(' ')
#print(mob_price[0])
sheet4.write(0,2,mob_price[0])

mob_star=ws.find('span',class_='a-icon-alt').text.split(' ')
#print(mob_star[0])
sheet4.write(0,3,mob_star[0])




#####################################################################################


res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')

#rev_src=res1.find('div',class_='a-row review-data').find('a',class_='a-link-emphasis a-text-bold')
#print(rev_src.get('href'))

i=1
j=0
while(j<11):
    for t1 in res1.find_all('div',class_='a-row review-data'):
        #print(t1.text)
        sheet4.write(i,0,t1.text)
        i+=1


    wb.save('rev.xls')


    for l1 in ws.find_all('li',class_='a-last'):
    #l1=link.split('/')
        for l2 in l1.find_all('a'):
            print(l2.get('href'))
            url="https://www.amazon.in"+l2.get('href')
            web = requests.get(url).text
            ws=BeautifulSoup(web,'lxml')
            
    res1=ws.find('div',class_='a-section a-spacing-none review-views celwidget')
    j+=1
##5###########################################################################################################################################


#####################################################FLIPCART#########################################################################






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
'''
print(web_soup.findAll("p"))
for p in ws.find_all('p'):
    print(p.text)
'''
#for div in ws.find_all('div',class_='a-expander-content a-expander-partial-collapse-content'):
#    print(div.text)

