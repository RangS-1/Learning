#include <stdio.h>
#include <stdbool.h>

int square(int num){ //return function! int, double, bool, string, float
    return num * num; //if it not using return, the int result will not do anything
}
double cube(double num){
    return num * num * num;
}
bool agecheck(int age){
    if(age < 18){ //true
        return true;
    }
    else{ //false
        return false;
    }
}
int main(){
    int x = square(2);
    double y = cube(9);
    int age = 21;
    printf("%d\n", x);
    printf("%.2f\n", y);

    if(agecheck(age)){ //true
        printf("you must sign up");
    }
    else{ //false
        printf("You are 18+");
    }
    return 0;
}