#peerxp-digigyaan

#!/bin/bash

"Content-type: text/html\n\n"

#printf "$1"
#printf "<br><br><br>"

#printf "$2"
#printf "<br><br><br>"

value=$1
#printf "$value"
#printf "<br>"

path='/var/www/html/ocr_webapp/upload/server/php/downloads/'
pathup='/var/www/html/ocr_webapp/upload/server/php/files/'
folder=$pathup$value
dest0=$pathup$value"/*"
#printf "$dest0"
#printf "<br>"

value1="$value.pdf"
#printf "$value1"
#printf "<br>"

dest1=$path$value1
#printf "$dest1"
#printf "<br>"

value2=$value"_ocr.pdf"
dest2=$path$value2
#printf "$dest2"
#printf "<br>"

#printf "before convert <br>"
a=$2
b=0
c=''
if [ $a -eq $b ];then
    printf "converting ........"
    sudo convert $dest0 $dest1
else
    printf "moving pdf ........"
    for i in $dest0
    {
	c=$c' '$i
    }
    pdfunite $c $dest1
fi

#sudo ocrmypdf $dest1  $dest2
sudo ocrmypdf -l tel+eng+hin --image-dpi 300 --pdf-renderer=tesseract --output-type=pdf $dest1 $dest2

sudo chmod 755 /var/www/html/ocr_webapp/upload/server/php/downloads/*

rm $dest0
rmdir $folder
printf "done ocr"

sudo rm $dest1

