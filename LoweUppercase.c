#include<stdio.h>

int main()
{
 char words[100];
 gets(words);
 for(int i=0; i<strlen(words);i++)
 {
  if (words[i]>='a' && words[i]<='z')
   printf("%c", words[i]-32);
  else
   printf("%c", words[i]);
 }
 return 0;
}
