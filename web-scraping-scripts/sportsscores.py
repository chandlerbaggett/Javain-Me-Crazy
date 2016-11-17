import requests, bs4

# using python3

def sportstringformat(string): # I dont have any ranked opponents at home to see the output, will probably have to change this soon
	for x in range (0, len(string)):
		if string[0] == 'v':
			return string[2:]
		elif string[0] == '@':
			if string[1] == '#':
				if string[3] == ' ':
					return string[4:]
				else:
					return string[5:]
			else:
				return string[1:]
# this is used to format the opponent string into what i want
				

'''
Some comments about the database before I pull everything
id will auto increment, that is fine
sport will be football for all of these
change time to outcome (char(1)), then I can store W or L in here and I don't have to find time
date, score, and opponent will be pulled
building id will just be folsom field

in recap, after changing the time column we will be able to fill in all football data from data generated in this script
I just have to figure out how to add stuff to a sql database from python
'''

# first is the football scores

res1 = requests.get('http://www.espn.com/college-football/team/schedule/_/id/38')
res1.raise_for_status()
data1 = bs4.BeautifulSoup(res1.text, "lxml")
# pulls the html file from espn

scoresraw = data1.select('ul.game-schedule')

tmplist = []
index = len(scoresraw)
for x in range (0, index):
	tmpstr = scoresraw[x].getText()
	tmplist.append(tmpstr)
# gets a lot of data and stores it in a list

scores = []; outcome = []; opponent = []
for x in range (0, index):
	if tmplist[x][0] == 'W' or tmplist[x][0] == 'L':
		outcome.append(tmplist[x][0])
		scores.append(tmplist[x][1:])
		tmpstr = sportstringformat(tmplist[x-1])
		opponent.append(tmpstr)
# this is going to make the lists that will fill our database

print(scores)
print(outcome)
print(opponent)

dateraw = data1.select('tr > td')
date = []
index = len(dateraw)
for x in range (0, index):
	tmpstr = dateraw[x].getText()
	if tmpstr[3] == ',':
		date.append(tmpstr)
# this does a similar strategy for getting the date

print(date)
# date has 12 indices whereas the other lists only have as many as the amount of games the team has played
