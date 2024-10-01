import { Injectable } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';

@Injectable({
  providedIn: 'root'
})
export class ValidadoresService {

  constructor() { }


  noGamo(control:FormControl):{[s:string]:boolean}|null{

    if(control.value?.toLowerCase()==='gamos'){
      return{noGamo:true}
    }

    return null;
   
  }

  passwordsIguales(pass1: string, pass2: string) {
    return (formGroup: FormGroup) => {
      const pass1Control = formGroup.get(pass1);
      const pass2Control = formGroup.get(pass2);
  
      if (pass1Control && pass2Control && pass1Control.value === pass2Control.value) {
        pass2Control.setErrors(null); // Si coinciden, quitamos el error
      } else {
        pass2Control?.setErrors({ noEsIgual: true }); // Si no coinciden, establecemos el error
      }
    };
  }
}
