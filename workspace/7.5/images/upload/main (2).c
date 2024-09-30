#include <stdio.h>
#include <stdlib.h>

int main(){
    FILE *myFile;
    myFile = fopen("916 data.txt", "r");

    //read file into array
    char a[2700][2700];

    if (myFile == NULL){
        printf("Error Reading File\n");
        exit (0);
    }

    for (int i = 0; i <2; i++){
        fscanf(myFile, "%s,", &a[i] );
    }
        for(int i=0;i<2;i++)
        {

printf("((ceiling(%s)))\n",a[i]);
printf("((exp(%s)))\n",a[i]);
printf("((floor(%s)))\n",a[i]);
printf("((fraction(%s)))\n",a[i]);
printf("(-(inverse(%s)))\n",a[i]);
printf("((log(%s)))\n",a[i]);
printf("((log_diff(%s)))\n",a[i]);
printf("(-(reverse(%s)))\n",a[i]);
printf("((round(%s)))\n",a[i]);
printf("((s_log_1p(%s)))\n",a[i]);
printf("((sqrt(%s)))\n",a[i]);
printf("(-(arc_cos(scale(%s))))\n",a[i]);
printf("((arc_sin(scale(%s))))\n",a[i]);
printf("((arc_tan(%s)))\n",a[i]);
printf("((pasteurize(%s)))\n",a[i]);
printf("((sigmoid(%s)))\n",a[i]);
printf("((tanh(%s)))\n",a[i]);
printf("((normalize(%s)))\n",a[i]);
printf("((rank(%s)))\n",a[i]);
printf("((regression_neut(%s,group_mean(%s,1,industry))))\n",a[i]);
printf("((regression_proj(%s,group_mean(%s,1,industry))))\n",a[i]);
printf("((zscore(%s)))\n",a[i]);
printf("((winsorize(%s,std=2)))\n",a[i]);
printf("((vector_neut(%s,ts_delta(%s,250))))\n",a[i]);
printf("((vector_proj(%s,ts_delta(%s,250))))\n",a[i]);
printf("((group_extra(%s,1,industry)))\n",a[i]);
printf("((group_max(%s,industry)))\n",a[i]);
printf("((group_mean(%s,1,industry)))\n",a[i]);
printf("((group_median(%s,1,industry)))\n",a[i]);
printf("((group_min(%s,industry)))\n",a[i]);
printf("((group_normalize(%s,industry)))\n",a[i]);
printf("((group_rank(%s,industry)))\n",a[i]);
printf("((group_scale(%s,industry)))\n",a[i]);
printf("((group_std_dev(%s,industry)))\n",a[i]);
printf("((group_sum(%s,industry)))\n",a[i]);
printf("((group_zscore(%s,sector)))\n",a[i]);
printf("((group_max(%s,sector)))\n",a[i]);
printf("((group_mean(%s,1,sector)))\n",a[i]);
printf("((group_median(%s,1,sector)))\n",a[i]);
printf("((group_min(%s,sector)))\n",a[i]);
printf("((group_normalize(%s,sector)))\n",a[i]);
printf("((group_rank(%s,sector)))\n",a[i]);
printf("((group_scale(%s,sector)))\n",a[i]);
printf("((group_std_dev(%s,sector)))\n",a[i]);
printf("((group_sum(%s,sector)))\n",a[i]);
printf("((-inst_pnl(%s)))\n",a[i]);
printf("((days_from_last_change(%s)))\n",a[i]);
printf("((ts_weighted_decay(%s,k=0.5)))\n",a[i]);
printf("((hump(%s,hump=0.01)))\n",a[i]);
printf("((hump(%s,hump=0.001)))\n",a[i]);
printf("((hump(%s,hump=0.005)))\n",a[i]);
printf("((hump_decay(%s,p=0)))\n",a[i]);
printf("((inst_tvr(%s,150)))\n",a[i]);
printf("((jump_decay(%s,120,sensitivity=0.5,force=0.1)))\n",a[i]);
printf("((last_diff_value(%s,150)))\n",a[i]);
printf("((ts_arg_max(%s,150)))\n",a[i]);
printf("((ts_arg_min(%s,150)))\n",a[i]);
printf("((ts_av_diff(%s,150)))\n",a[i]);
printf("((ts_decay_exp_window(%s,150,factor=f)))\n",a[i]);
printf("((ts_delay(%s,150)))\n",a[i]);
printf("((ts_delta(%s,150)))\n",a[i]);
printf("((ts_ir(%s,150)))\n",a[i]);
printf("((ts_kurtosis(%s,150)))\n",a[i]);
printf("((ts_max(%s,150)))\n",a[i]);
printf("((ts_max_diff(%s,150)))\n",a[i]);
printf("((ts_mean(%s,150)))\n",a[i]);
printf("((ts_median(%s,120)))\n",a[i]);
printf("((ts_min(%s,150)))\n",a[i]);
printf("((ts_min_diff(%s,150)))\n",a[i]);
printf("((ts_min_max_cps(%s,150,f=2)))\n",a[i]);
printf("((ts_min_max_diff(%s,32,f=0.5)))\n",a[i]);
printf("((ts_moment(%s,150,k=0)))\n",a[i]);
printf("((ts_rank(%s,150)))\n",a[i]);
printf("((ts_returns(%s,150)))\n",a[i]);
printf("((ts_scale(%s,150)))\n",a[i]);
printf("((ts_skewness(%s,150)))\n",a[i]);
printf("((ts_std_dev(%s,150)))\n",a[i]);
printf("((ts_zscore(%s,250)))\n",a[i]);
printf("((ts_entropy(%s,250)))\n",a[i]);
printf("((inst_tvr(%s,50)))\n",a[i]);
printf("((jump_decay(%s,20,sensitivity=0.5,force=0.1)))\n",a[i]);
printf("((last_diff_value(%s,50)))\n",a[i]);
printf("((ts_arg_max(%s,50)))\n",a[i]);
printf("((ts_arg_min(%s,50)))\n",a[i]);
printf("((ts_av_diff(%s,50)))\n",a[i]);
printf("((ts_decay_exp_window(%s,50,factor=f)))\n",a[i]);
printf("((ts_delay(%s,50)))\n",a[i]);
printf("((ts_delta(%s,50)))\n",a[i]);
printf("((ts_ir(%s,50)))\n",a[i]);
printf("((ts_kurtosis(%s,50)))\n",a[i]);
printf("((ts_max(%s,50)))\n",a[i]);
printf("((ts_max_diff(%s,50)))\n",a[i]);
printf("((ts_mean(%s,50)))\n",a[i]);
printf("((ts_median(%s,50)))\n",a[i]);
printf("((ts_min(%s,50)))\n",a[i]);
printf("((ts_min_diff(%s,50)))\n",a[i]);
printf("((ts_min_max_cps(%s,50,f=2)))\n",a[i]);
printf("((ts_min_max_diff(%s,50,f=0.5)))\n",a[i]);
printf("((ts_moment(%s,50,k=0)))\n",a[i]);
printf("((ts_rank(%s,50)))\n",a[i]);
printf("((ts_returns(%s,50)))\n",a[i]);
printf("((ts_scale(%s,50)))\n",a[i]);
printf("((ts_skewness(%s,50)))\n",a[i]);
printf("((ts_std_dev(%s,50)))\n",a[i]);
printf("((ts_zscore(%s,50)))\n",a[i]);
printf("((ts_entropy(%s,50)))\n",a[i]);

        }
    fclose(myFile);

    return 0;
}