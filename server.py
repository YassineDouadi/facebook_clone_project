# by YassineDouadi(CipherX)
import time
import urllib.request

def read_file(file_url):
    with urllib.request.urlopen(file_url) as response:
        file_contents = response.read().decode('utf-8')
    return file_contents

def update_file(file_url, last_position=0):
    while True:
        file_contents = read_file(file_url)
        new_contents = file_contents[last_position:]
        print(new_contents, end="")
        last_position = len(file_contents)
        time.sleep(1)

# URL of the text file to be displayed
text_file_url = 'http://192.168.1.3/FB/info.txt'

# Update and display the text file contents every second
update_file(text_file_url)
