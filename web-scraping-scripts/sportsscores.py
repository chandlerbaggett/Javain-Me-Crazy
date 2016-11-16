import requests, bs4

def stringcutoff(string):
	l = 0
	for x in range (0, len(string)):
		if string[x] == ' ':
			l = x
	return string[l+1:]
#used to change a string of 'vs OSU' or '@ 4 MISH' to 'OSU' and 'MISH'

# first is the football scores

res1 = requests.get('http://www.espn.com/college-football/team/_/id/38/colorado-buffaloes')
res1.raise_for_status()
data1 = bs4.BeautifulSoup(res1.text, "lxml")
# this the the html of the espn webpage

scoresraw = data1.select('div.game-meta')
# scoresraw is a bs4 list

tmplist = []
index = len(scoresraw)
for x in range (0, index):
	tmpstr = scoresraw[x].getText()
	tmplist.append(tmpstr)
# the way espn formatted their html this makes a list with values looking like this: 'W44-7'

outcome = []; scores = []
for x in range (0, index):
	if tmplist[x][0] == 'W' or tmplist[x][0] == 'L':
		outcome.append(tmplist[x][0])
		scores.append(tmplist[x][1:5])
# this loop separates the data from tmplist into two different lists

opponentraw = data1.select('div.game-info')
# another bs4 list

index = len(scores)
opponent = []
for x in range (0, index):
	tmpstr = opponentraw[x].getText()
	tmpstr2 = stringcutoff(tmpstr)
	opponent.append(tmpstr2)
	
print(opponent)
print(scores)
print(outcome)
