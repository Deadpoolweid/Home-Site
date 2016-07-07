#include "stdafx.h"
#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <time.h>
#include <conio.h>
#include <iostream>
# define n 10
int *m;
int pos;


void merge(int a, int b, int tm11[], int tm21[], int y[])
{
  int i1,j1;
  i1=0; j1=0;
  do
  {
    if (tm11[i1]<tm21[j1])
    {
      y[pos]=tm11[i1];
      i1++;
    }
    else
    {
      y[pos]=tm21[j1];
      j1++;
    }
    pos++;
  } while ((i1<a) && (j1<b));

  if (i1>=a)
    while (j1<b)
    {
      y[pos]=tm21[j1];
      j1++;
      pos++;
    }
  else
    while (i1<a)
    {
      y[pos]=tm11[i1];
      i1++;
      pos++;
    }
}

void sort(int q, int x[])
{
  int k1,k2,st,u,fl;
  int tm1[n], tm2[n];
  k1=1;
  while (k1 < q-1)
  {
    st=1;
    fl=1;
    pos=0;
    while (fl==1)
    {
      u=0;
      while ((x[u+st-1]<=x[u+st]) && (u+st-1 < q))
      {
	tm1[u]=x[u+st-1];
	u++;
      }
      if ((x[u+st-1]>x[u+st]) || (u+st-1 == q-1))
      {
	tm1[u]=x[u+st-1]; u++;
      }
      k1=u;
      st=st+k1;
      u=0;
      while ((x[u+st-1]<=x[u+st]) && (u+st-1 < q))
      {
	tm2[u]=x[u+st-1];
	u++;
      }
      if ((x[u+st-1]>x[u+st]) || (u+st-1 == q-1))
      {
	tm2[u]=x[u+st-1]; u++;
      }
      k2=u;
      st=st+k2;
      if (u > 0)
	merge(k1,k2,tm1,tm2,x);
      if (st>q)  fl=0;
    }
  }
}

void main()
{
  clrscr();
  randomize();
  g_1(1,20,n,m);
  viv_1(1,1,5,n,m);
  sort(n,m);
  viv_1(1,15,5,n,m);
  getch();
}

