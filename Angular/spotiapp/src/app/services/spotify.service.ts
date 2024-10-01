import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
//OBSERVADORES

@Injectable({
  providedIn:'root'
})
export class SpotifyService {

  constructor(private http:HttpClient) { 
    console.log('Spoty servicio listooooo');
  }

  getQuery(query:string){
    const url=`https://api.spotify.com/v1/${query}`;

    const headers=new HttpHeaders({
      'Authorization':'Bearer BQATNp8VMS01LsRMV_3UZdNvql2Gdi9-UlBVAFCkNWTZHwLjIuk1kEQOIf6wYfk8PcNLjfvBM8V1yGmSdrXBQxI2XtFj9IoeL-EjH9YIHlQdE4CUW30'
    });
    return this.http.get(url,{headers});
  }

  getNewReleases(){

   /*const headers=new HttpHeaders({
      'Authorization':'Bearer BQDCfjQ4xE-I_GyAO02zE5WZwot6Uyk_kMW_iTAMKh2zbfFytf_aqJYPJc3aU4-i38uHgK5xA7dccJ9DLtI7YcIBUWbE82MLQnIUZiLABjJzjngy2F0'
    });
   return this.http.get('https://api.spotify.com/v1/browse/new-releases',{headers});*/


   return this.getQuery('browse/new-releases');
    
  }

  getArtistas(termino:string){

    /*const headers=new HttpHeaders({
      'Authorization':'Bearer BQDCfjQ4xE-I_GyAO02zE5WZwot6Uyk_kMW_iTAMKh2zbfFytf_aqJYPJc3aU4-i38uHgK5xA7dccJ9DLtI7YcIBUWbE82MLQnIUZiLABjJzjngy2F0'
    });
   return this.http.get(`https://api.spotify.com/v1/search?q=${termino}&type=artist&limit=15`,{headers});*/

   
    return this.getQuery(`search?q=${termino}&type=artist&limit=15`)
  }

  getArtista(termino:string){

    return this.getQuery(`artists/${termino}`);
  }

  getTopTracks(id:string){

    return this.getQuery(`artists/${id}/top-tracks?country=us`);
  }


}