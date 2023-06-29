### NOTES:

##GIT:-
=>Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency. 





Note:Git actualy keep record of all the changes done .
=> In order to get the repo either we do "cloning or we initialize (init) it .

=>To set The user name nad email:
 git config --global user.name Ashu
 git config --global user.email mailtoashu478@gmail.com
 
 => to initilazie git repo 
 git init


=> to check status of all files:-
git status 
=> It will all fles status whether it is untracked ,unmodified,modified ,staged(finall commit)
once we staged  any file then it wull go in git snapshot and git wil track of this file 

## to add a single  file in staging area :
git add index.html

## To add more than one file:- git -A
## to commit any  file : git commit  
## to add any message while git commit without opening any editor to write the msg :git commit -m "Added more Htmls file"
this "-m" flag is very much important command 

## in order to match with last commit we can run command :git checkout

#For Mutiples files, we can use "-f" flag: git checkout -f 
=> it will match all our changes in any file with last commit (match the working directoy with last commit )

# In order to check what commit ha sbeen performed: git log

# In order to check only last 2 commit we can use flag "-p" : git log -p -2
=> It will show all file also and changes : Now to quit form here hus enter "q"

## In order to see ethe diferce between file done jdut run the command :git diff

It compares  working directoy with staging area (check given and compare with it last edited file)  

## to comapre "staging area" with "last commit" :git diff --stage

## If we wan to add file directly into commit without sending in staging area :
git commit -a -m "Adding without passing in staging area"