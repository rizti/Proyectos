import { Component } from '@angular/core';
import { Form, NgForm } from '@angular/forms';

@Component({
  selector: 'app-template',
  templateUrl: './template.component.html',
  styleUrl: './template.component.css'
})
export class TemplateComponent {

  usuario={
    nombre:'',
    apellido:'',
    correo:'',
   genero:'M'
  }

  guardar(forma:NgForm){

    if(forma.invalid){

      Object.values(forma.controls).forEach(control=>{
        control.markAsTouched();
      })


      return;
    }

    console.log(forma.value);
  }

}

