#include <stdio.h>
#include <string.h>
#include <stdbool.h>

int main(){
    
    //int number = 0;

    //do{ //true condition
    //    printf("Enter a number greater than zero: ");
    //    scanf("%d", &number);
    //}while (number <= 0); //check condition!

//    char password[30];

//    printf("Enter your password: ");
//    fgets(password, sizeof(password), stdin);
//    password[strlen(password) - 1] = '\0';

//    while(strlen(password) == 0){
//        printf("Can't empty! Try Again: ");
//        fgets(password, sizeof(password), stdin);
//        password[strlen(password) - 1] = '\0';
//    }

//    printf("Good, you login now with password %s", password);
    
    bool starting = true;
    char response;

    while(starting){//do{
        printf("You are starting the game\n");
        printf("You want to continue? (Y = Yes, N = no): ");
        scanf(" %c", &response);
        if(response != 'Y' && response != 'y'){
            starting = false;
        }
    }//while(starting);

    printf("You quit the game!");

    return 0;
}