#include <stdio.h>
#include <stdlib.h>

int main(){
    FILE *myFile;
    //myFile = fopen("matrix_usa_1.txt", "r");
    //myFile = fopen("matrix_usa_2.txt", "r");
   // myFile = fopen("matrix_usa_3.txt", "r");

    //read file into array
    char a[2700][2700];

    if (myFile == NULL){
        printf("Error Reading File\n");
        exit (0);
    }

    for (int i = 0; i < 1700; i++){
        fscanf(myFile, "%s,", &a[i] );
    }
        for(int i=0;i<1700;i++)
        {
            printf("\n",a[i]);





        }
    fclose(myFile);

    return 0;
}