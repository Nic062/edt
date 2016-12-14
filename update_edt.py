import mechanize
import shutil
import urllib

login = 'login'
password = 'password'
br = mechanize.Browser()
br.addheaders = [('User-agent', 'Firefox')]
r = br.open("https://vtmob.univ-valenciennes.fr/esup-vtclient-up4/stylesheets/desktop/welcome.xhtml")
br.select_form(nr=0)
br.form['username'] = login
br.form['password'] = password
r = br.submit()
r = br.follow_link()

parameters = {'j_id12:_idcl' : 'j_id12:j_id15', '_noJavaScript' : 'false', 'javax.faces.ViewState' : '!1', 'org.apache.myfaces.trinidad.faces.FORM' :'j_id12'}
data = urllib.urlencode(parameters)

with open('edt.ics', 'wb') as f:
    shutil.copyfileobj(br.open(br.geturl(),data), f)
