@echo off 
:love 
svn add . --force
svn ci --force-log --file  svnlog
goto love