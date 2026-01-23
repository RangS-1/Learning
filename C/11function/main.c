#include <stdio.h>
#include <string.h>
//void happybirthday(char yname[], int old){
//  printf("happy birthday to you %s\n", yname) you can rename it
//}

void happybirthday(char name[], int age){ //declare name[] and age
    printf("Happy birthday to you\n");
    printf("Happy birthday to you\n");
    printf("Happy birthday to you %s\n", name); //show name[] inside main()
    printf("Now your age is %d\n", age);
}

int main(){

    //char name[] = "RangS";
    //int age = 17;

    char name[100] = ""; //max 100
    int age = 0;
    printf("insert your name: \n");
    fgets (name, sizeof(name), stdin); //cuz string
    name[strlen(name) - 1] = '\0'; // if user press enter, it will add new line! this is how to handle it.

    printf("Insert your age: \n");
    scanf("%d", &age);

    //happybirthday(); //call function
    happybirthday(name, age); //send arguments/parameters
    //happybirthday(age, name) is wrong cuz the declare function not same!
    

    return 0;
}