#include <stdio.h>
#include <string.h>

void order(char words[])
{
    int i=0;

    for(int i=0; i<strlen(words);i++)
    {
        if (words[i]>='a' && words[i]<='z')
   printf("%c", words[i]-32);
        else
   printf("%c", words[i]);

    }

}
int main()
{
    char wordsinput[122], wordsoutput[122];
   
    scanf("%s", wordsinput);

    order(wordsinput);

    printf("%s\n",wordsoutput);

}
