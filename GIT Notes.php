### NOTES:

##GIT:-
=>Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency. 

## What is VCS & why do we need it?
=> Version Control system that record the chnages in a file or th set of files over time so that you can specific chnages over time .
Now it is of three types:
1. Local VCS
2. Centralized VCS
3.Distributed VCS

 
Note:Git actualy keep record of all the changes done .
=> In order to get the repo either we do "cloning or we initialize (init) it .

=>To set The user name nad email:
 git config --global user.name Ashu
 git config --global user.email mailtoashu478@gmail.com
 
 => to initilazie git repo 
 git init


=> to check status of all files:-
git status 
=> It will all files status whether it is untracked ,unmodified,modified ,staged(finall commit)
once we staged  any file then it wull go in git snapshot and git wil track of this file 

## to see the status along with summary:
git status -s

## to add a single  file in staging area :
git add index.html

## To add more than one file(all files ):- git add -A or git add --a
## to commit any  file : git commit  
## to add any message while git commit without opening any editor to write the msg :git commit -m "Added more Htmls file"
this "-m" flag is very much important command .

## in order to match with last commit we can run command :git checkout

#For Mutiples files, we can use "-f" flag: git checkout -f 
=> it will match all our changes in any file with last commit (match the working directoy with last commit )

# In order to check what commit has been performed: git log

# In order to check only last 2 commit we can use flag "-p" : git log -p -2
=> It will show all file also and changes : Now to quit form here hus enter "q"

## In order to see the diference between file done just run the command :git diff

=>It compares  working directoy with staging area (check given and compare with it last edited file)  

## to compare "staging area" with "last commit" :git diff --stage

## If we want to add file directly into commit without sending in staging area :
git commit -a -m "Adding without passing in staging area"


## If we created any file by mistake and also added to staging then commited it also if we want to remove it 
git rm filename => it will remove from staging area as well as form our harddisk
=> But if we want to remove only from staging area and keep in harddisk
git  rm --cached filename

##GitIgnore: 
In order to ignore any files(like automatically generated log files)  which we dont want  to push on repo  we use .gitignore files 












------------------------------------------------------------------------------------------------------------------------------------------
##Guide to vi Editor on Linux:
Command Mode
When you first open a file in vi, you are in command mode. In command mode, you can use various keyboard commands to navigate file and perform various editing functions. Here are some of most commonly used commands in command mode −

h − Move cursor left

j − Move cursor down

k − Move cursor up

l − Move cursor right

i − Switch to insert mode

x − Delete character under cursor

dd − Delete current line

:w − Save file

:q − Quit vi

:q! − Quit vi without saving changes