#! /bin/bash
i=1
#echo $SECONDS
while :
do
svn update
#	echo $SECONDS
     let "i=i + 1"
sleep 1
done
