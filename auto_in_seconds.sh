step=1 #間隔的秒數

for (( i = 0;  i < 60;  i=(i+step) ));  do
    php artisan schedule:run >> /dev/null 2>&1
    sleep $step
done

exit 0
