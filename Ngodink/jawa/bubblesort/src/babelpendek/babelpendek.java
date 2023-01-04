/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package babelpendek;

import java.util.Scanner;
import java.util.Collections;
import java.util.*;

/**
 *
 * @author admin
 */
public class babelpendek {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        //membuat tipe data dengan variabel:
        int angka, a, b, temp, pilih;
        //membuat object scanner
        Scanner input = new Scanner(System.in);
        
        System.out.println("|+++++++++++++++++++++++++++|");
        System.out.print("Jumlah Data yang ingin di input : ");
        angka = input.nextInt();//tempat user memasukan jumlah data yang ingin di input
        
        //deklarasi array
        int array[] = new int[angka];
        
        for(a=0;a<angka;a++){
            System.out.print("Masukan data " + (a+1) + ": ");
            array[a] = input.nextInt();//user memasukan data
        }
        
        //pemilihan metode
        System.out.println("|+++++++++++++++++++++++++++|");
        System.out.println("1. Asscending");
        System.out.println("2. Desscending");
        System.out.println("|+++++++++++++++++++++++++++|");
        pilih = input.nextInt();
        
        switch(pilih){
            
            //jika user memilih 1 (Asscending)
            case 1:
                System.out.println("Data Sebelum Diurut");
                for(a=0;a<angka;a++){
                    System.out.print(array[a]+",");
                }
                //mengolah data mengurut secara Asscending
                for(a=0;a<(angka - 1);a++){
                    for(b=0;b<angka-a-1;b++){
                        if(array[b]>array[b+1]){
                            temp = array[b];
                            array[b] = array[b+1];
                            array[b+1] = temp;
                        }
                    }
                }
            break;
            //jika user memilih 2(Desscending)
            case 2:
                System.out.println("Data Sebelum Diurut");
                for(a=0;a<angka;a++){
                    System.out.print(array[a]+",");
                }
                for(a=0;a<(angka - 1);a++){
                    for(b=0;b<angka-a-1;b++){
                        if(array[b]<array[b+1]){
                            temp = array[b];
                            array[b] = array[b+1];
                            array[b+1] = temp;
                        }
                    }
                }
            break;
            
            default:
                System.out.println("UwU");
        }
        System.out.println("\nData Setelah Diurut");
        for(a=0;a<angka;a++){
            System.out.print(array[a]+",");
        }
        
        //menentukan nilai max & min
        
        
        //menentukan nilai rata
        double oppai;
        double osas = 0;
        
        for(int k=0;k<array.length;k++){
            osas += array[k];
        }oppai = osas / array.length;
//        System.out.println("Nilai Tertinggi :" + max);
//        System.out.println("Nilai Terendah :" + min);
        System.out.println("\nRata-rata Nilai :" + oppai);
    }
    
}
