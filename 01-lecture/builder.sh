#! /bin/bash

mkdir "project" && echo "Directory \"project\" successfully created"

cd project 

touch readme.txt && echo "File \"readme.txt\" successfully created" && 
echo 'This file created with a bash script' > readme.txt

cat readme.txt