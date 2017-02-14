// decimal a cualquier otra base

#include <stdio.h>
#include <string.h>

#define NMAX 50000
#define STRING "0123456789ABCDEFGHIJKLMOPQRSTUVWXYZ"


void Dec2Bin(int n,int base,char cad[]);

int main()
{
    int num, base;
    char cad[100];

    scanf("%d %d",&num,&base);
    while(num > 0)
    {
        if(num <= NMAX && base >1 && base <= 36)
        {
            Dec2Bin(num,base,cad);
        }
        else
        {
            printf("***\n");
            scanf("%d %d",&num,&base);
        }
    }
    printf("%s",cad);

    return 0;
}

void Dec2Bin(int n, int base, char cad[])
{
    int leng;
    if(n < base)
    {
        cad[0]=STRING[n];
        cad[1]='\0';
    }
    else
    {
        Dec2Bin (n/base, base,cad);

        leng= strlen(cad);
        cad[leng]=STRING[n%base];
        cad[leng+1]='\0';
    }
}
