/******************************************************************************

                              Online C++ Compiler.
               Code, Compile, Run and Debug C++ program online.
Write your code in this editor and press "Run" button to compile and execute it.

*******************************************************************************/
// Example program
#include <iostream>
#include <string>
#include <stdlib.h>
using namespace std;
int main()
{
  char str[] = "bcvqBeqacrtqazeigwiaobxrkrtuiAzahfLreqcLreqcCreqcTkgd4Fj85e{bnjrYwgk8OgbceUrwqrkfvbmntewsojklowhmkoHooyfovbnkwii87trfghonakidutfbeghk9co987r5tfbyhjiopo087ttfcvio087tghk9}";
    int a = 0;
    for(int i=0;i<sizeof(str);i++){
        a++;
        if(a==5){
            cout << str[i];
            a = 0;
        }
    }
}
/****OUTPUT
->BreakALL{}
********/
