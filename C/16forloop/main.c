#include <stdio.h>
#include <windows.h> //Windows function
//#include <unistd.h> Linux/Mac functions

int main(){

    //gampang lah ya!

    //for(int i = 1; i <= 50; i++){ //i+=2
    //    printf("%d\n", i);
    //}

    for(int i = 10; i >= 1; i--){ //i-=2
        Sleep(1000); //windows use milisecond
        //sleep(1); //Linux/Mac use second
        printf("%d\n", i);
    }

    printf("Happy New Year!");
    return 0;
}