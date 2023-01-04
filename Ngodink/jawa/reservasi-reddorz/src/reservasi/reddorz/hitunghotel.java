/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reservasi.reddorz;

/**
 *
 * @author muhfaik04_
 */
public class hitunghotel extends hotel{
    private int tarif;
    private String kamar;
    
    public int get_harga(){
        if(type == 1){
            tarif = 250000;
        } else if(type == 2){
            tarif = 500000;
        } else if(type == 3){
            tarif = 750000;
        } else{
            
        }
        
        return tarif;

    }
    
    public String get_kamar(){
        if(type == 1){
            kamar = "Deluxe";
        } else if(type == 2){
            kamar = "Premium";
        } else if(type == 3){
            kamar = "Superior";
        } else{
            
        }
        
        return kamar;

    }
    
    public int get_total(){
        return tarif*waktu;
    }
}