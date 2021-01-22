#include <stdio.h>
#include <time.h>
#include <stdlib.h>

struct TIME {
        int seconds;
        int minutes;
        int hours;
};


void differenceBetweenTimePeriod(struct tm* s,
                                 struct TIME stop,
                                 struct TIME *diff) {
        struct TIME start;
        start.seconds = s->tm_sec;
        start.minutes = s->tm_min;
        start.hours = s->tm_hour;
           while (stop.seconds < start.seconds) {
                         --stop.minutes;
                               stop.seconds += 60;
                                  }
              diff->seconds = stop.seconds - start.seconds;
                 while (stop.minutes < start.minutes) {
                               --stop.hours;
                                     stop.minutes += 60;
                                        }
                    diff->minutes = stop.minutes - start.minutes;
                       diff->hours = stop.hours - start.hours;
}


int main() {

    time_t now;
    struct TIME stopTime, diff;

    time(&now);

    struct tm *local = localtime(&now);

    if((int) local->tm_hour < 12)
        printf("%02d:%02d:%02d am \n", local->tm_hour, local->tm_min, local->tm_sec);
    else
        printf("%02d:%02d:%02d pm \n", local->tm_hour, local->tm_min, local->tm_sec);

    printf("Enter the stop time. \n");
    printf("Enter hours, minutes and seconds: ");
    scanf("%d %d %d", &stopTime.hours,
                      &stopTime.minutes,
                      &stopTime.seconds);

        differenceBetweenTimePeriod(local, stopTime, &diff);


           printf("= %d:%d:%d\n", abs(diff.hours),
                                  abs(diff.minutes),
                                  abs(diff.seconds) );
    return 0;
}
