#include <cstdio>
#include <cstdlib>
#include <string>

#define NUM  8
#define GP1  "1.gs1"
#define GP2  "2.gs1"
#define GP3  "3.gs1"
#define GP4  "4.gs1"
#define GP5  "5.gs1"
#define GP6  "6.gs1"
#define GP7  "7.gs1"
#define GP8  "8.gs1"
#define OUT  "gs1.out"
#define JDG  0.5
#define RTR  0.3
#define GST  0.2

int jdg[20];
int rtr[20];
int gst[20];
double pnt[NUM];
int num[3];
int n[NUM];

int main()
{
    char temp;
    int ti;
    double td;
    double cal;
    bool flag;
    
    freopen(OUT, "w", stdout);
    
    for (int i = 0; i < NUM; i++)
    {
        for (int j = 0; j < 10; j++)
		{
			jdg[j] = 0;
			rtr[j] = 0;
			gst[j] = 0;
		}
		for (int j = 0; j < 3; j++)
		{
			num[j] = 0;
		}
		n[i] = i + 1;
        switch (i)
        {
            case 0: freopen(GP1, "r", stdin); break;
            case 1: freopen(GP2, "r", stdin); break;
            case 2: freopen(GP3, "r", stdin); break;
            case 3: freopen(GP4, "r", stdin); break;
			case 4: freopen(GP5, "r", stdin); break;
			case 5: freopen(GP6, "r", stdin); break;
			case 6: freopen(GP7, "r", stdin); break;
			case 7: freopen(GP8, "r", stdin); break;
            default : break;
        }
        flag = 0;
        while (0 == flag)
        {
            temp = getchar();
            switch (temp)
            {
                case 'j':
                    scanf("%d", &jdg[num[0]]);
                    num[0]++;
                    break;
                case 'r':
                    scanf("%d", &rtr[num[1]]);
                    num[1]++;
                    break;
                case 'g':
                    scanf("%d", &gst[num[2]]);
                    num[2]++;
                    break;
                default:
                    flag = 1;
                    break;
            }
            temp = getchar();
        }
        fclose(stdin);
		if (num[0] != 0)
		{
			for (int j = 0; j < num[0]; j++)
			{
				cal += (double)jdg[j];
			}
			cal /= num[0];
			pnt[i] += cal * JDG;
		}
        cal = 0;
		if (num[1] != 0)
		{
			for (int j = 0; j < num[1]; j++)
			{
				cal += (double)rtr[j];
			}
			cal /= num[1];
			pnt[i] += cal * RTR;
		}
        cal = 0;
		if (num[2] != 0)
		{
			for (int j = 0; j < num[2]; j++)
			{
				cal += (double)gst[j];
			}
			cal /= num[2];
			pnt[i] += cal * GST;
		}
        cal = 0;
		
    }
    
    for (int i = 0; i < NUM; i++)
    {
        for (int j = i; j < NUM; j++)
        {
            if (pnt[i] < pnt[j])
            {
                td = pnt[i];
                pnt[i] = pnt[j];
                pnt[j] = td;
                ti = n[i];
                n[i] = n[j];
                n[j] = ti;
            }
        }
    }
    
    for (int i = 0; i < NUM; i++)
    {
        printf("%d:  %.3f\n", n[i], pnt[i]);
    }
    
    
    
    return 0;
}
    
