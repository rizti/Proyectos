import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { HeroeModel } from '../models/heroe.model';
import { map } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class HeroesService {

  private url='https://heroes1-bc9dd-default-rtdb.europe-west1.firebasedatabase.app'

  constructor(private http:HttpClient) { }


  crearHeroe(heroe:HeroeModel){
    
    return this.http.post(`${this.url}/heroes.json`, heroe). pipe(
      map((resp:any)=>{
        heroe.id=resp.name;
        return heroe;
      })
    );
  }

  actualizarHeroe(heroe:HeroeModel){

    const heroeTemp={
      ...heroe
    };

    delete heroeTemp.id;

    return this.http.put(`${this.url}/heroes/${heroe.id}.json`,heroeTemp)

  }

  getHeroes() {
    return this.http.get<Record<string, HeroeModel> | null>(`${this.url}/heroes.json`).pipe(
      map(this.crearArreglo) 
    );
  }

  private crearArreglo(heroesObj: Record<string, HeroeModel> | null): HeroeModel[] {

    if (heroesObj === null) {
      return [];
    }

    const heroes: HeroeModel[] = [];

   
    Object.keys(heroesObj).forEach(key => {
      const heroe: HeroeModel = heroesObj[key];
      heroe.id = key; 
      heroes.push(heroe); 
    });

    return heroes; 
  }


  getHeroe(id:String){
    return this.http.get(`${this.url}/heroes/${id}.json`);
  }
}
