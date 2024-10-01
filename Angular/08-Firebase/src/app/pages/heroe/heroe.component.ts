import { Component } from '@angular/core';
import { HeroeModel } from '../../models/heroe.model';
import { NgForm } from '@angular/forms';
import { HeroesService } from '../../services/heroes.service';

import Swal from 'sweetalert2';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-heroe',
  templateUrl: './heroe.component.html',
  styleUrl: './heroe.component.css'
})
export class HeroeComponent {
  heroe:HeroeModel=new HeroeModel();

  constructor(private heroesService:HeroesService, private route:ActivatedRoute){ }

  ngOnInit(){
    const id= this.route.snapshot.paramMap.get('id');

    if(id! && id== 'nuevo'){
      this.heroesService.getHeroe(id).subscribe(resp=>{
        this.heroe = resp;
        this.heroe.id=id;
      });
    }
  }

  guardar(form:NgForm){
    if(form.invalid){
      return;
    }

    Swal.fire({
      title:'Espere',
      text:'Guardando Informacion',
      icon:'info',
      allowOutsideClick:false
    });
    Swal.showLoading();

    if(this.heroe.id){

      this.heroesService.actualizarHeroe(this.heroe).subscribe(resp=>{
        console.log(resp);
        Swal.fire({
          title:this.heroe.nombre,
          text:'Se actualizo',
          icon:'success'
        });
      });

    }else{

      this.heroesService.crearHeroe(this.heroe).subscribe(resp=>{
        console.log(resp);
        Swal.fire({
          title:this.heroe.nombre,
          text:'Se actualizo',
          icon:'success'
      });
    });


   
  }
  }
}
