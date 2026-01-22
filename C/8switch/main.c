#include <stdio.h>

int main(){
    // switch, alternative if you use so many if-else statements

    int day = 0;

    printf("Enter a day (1-7): ");
    scanf("%d", &day);

    switch(day){
        case 1: //case 'A': if you want the input is A
            printf("It's SENNNIN");
            break; //stop program
        case 2:
            printf("It's SELLASA");
            break;
        case 3:
            printf("It's RABBU");
            break;
        case 4:
            printf("It's KHAMMIS");
            break;
        case 5:
            printf("It's JUMMAT");
            break;
        case 6:
            printf("It's SABTTTUU");
            break;
        case 7:
            printf("It's MINGGGU");
            break;
        default:
            printf("Insert number 1-7");
    }
}