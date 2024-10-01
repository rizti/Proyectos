import { Component } from '@angular/core';
import { FormArray, FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ValidadoresService } from '../../services/validadores.service';

@Component({
  selector: 'app-reactive',
  templateUrl: './reactive.component.html',
  styleUrl: './reactive.component.css'
})
export class ReactiveComponent {

  forma!:FormGroup;

  constructor(private fb:FormBuilder, private validadores:ValidadoresService){
    this.crearFormulario();
    this.cargarDataFormulario();

  }

  nombreNoValido(){
    return this.forma.get('nombre')?.invalid && this.forma.get('nombre')?.touched;
  }
  apellidoNoValido(){
    return this.forma.get('apellido')?.invalid && this.forma.get('apellido')?.touched;
  }
  correoNoValido(){
    return this.forma.get('correo')?.invalid && this.forma.get('correo')?.touched;
  }
  distritoNoValido(){
    return this.forma.get('direccion.distrito')?.invalid && this.forma.get('direccion.distrito')?.touched;
  }
  ciudadNoValido(){
    return this.forma.get('direccion.ciudad')?.invalid && this.forma.get('direccion.ciudad')?.touched;
  }
  pasatiempos(){
    return this.forma.get('pasatiempos') as FormArray;
  }
  password1NoValido(){
    return this.forma.get('password1')?.invalid && this.forma.get('password1')?.touched;
  }
  password2NoValido(){
    const pass1  = this.forma.get('password1')?.value;
    const pass2  = this.forma.get('password2')?.value;

    return pass1 !== pass2 && this.forma.get('password2')?.touched;
  }




  crearFormulario(){
    this.forma=this.fb.group({
      nombre:['',[Validators.required, Validators.minLength(5)]  ],
      apellido:['',[Validators.required, Validators.minLength(5), this.validadores.noGamo]  ],
      correo:['', [Validators.pattern("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"),Validators.required]  ],
      password1:['',Validators.required],
      password2:['',Validators.required],
      direccion:this.fb.group({
        distrito:['',Validators.required],
        ciudad:['',Validators.required],
      }),
      pasatiempos:this.fb.array([])
    },{
      validators:this.validadores.passwordsIguales('password1','password2')
    });
  }



  guardar(){
      console.log(this.forma);

      
    if(this.forma.invalid){

      Object.values(this.forma.controls).forEach(control=>{
        if(control instanceof FormGroup){
          Object.values(control.controls).forEach(control=>control.markAsTouched());
        }else{
          control.markAsTouched();
        }
       
      })


      return;
    }
    this.forma.reset();
}

cargarDataFormulario(){
  this.forma.reset({
    nombre: 'ignacio',
    apellido: 'gamos',
    correo: 'ignacio@gmail.com',
    direccion: {
      distrito: 'guadalajara',
      ciudad: 'azuqueca'
    }
  });
}

agregarPasatiempo(){
  this.pasatiempos().push( this.fb.control(''));
}
borrarPasatiempo(i:number){
  this.pasatiempos().removeAt(i);
}


}