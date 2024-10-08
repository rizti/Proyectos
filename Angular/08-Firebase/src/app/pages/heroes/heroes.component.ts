import { Component } from '@angular/core';
import { HeroesService } from '../../services/heroes.service';
import { HeroeModel } from '../../models/heroe.model';

@Component({
  selector: 'app-heroes',
  templateUrl: './heroes.component.html',
  styleUrl: './heroes.component.css'
})
export class HeroesComponent {

  heroes:HeroeModel[]=[];

  constructor(private heroesService:HeroesService){

  }

  ngOnInit(): void {
    this.heroesService.getHeroes().subscribe(resp => {
      this.heroes=resp
    });
  }

  
}
