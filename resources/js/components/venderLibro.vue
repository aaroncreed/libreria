<template>
<v-form
  id="form"
    v-model="valid"
    lazy-validation
ref="form"
  >
<v-row>
  <v-col cols="12" lg="4">
          <v-text-field
      v-model="Codbarras"
      name="Codbarras"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="Codigo de Barra"
      required
      
      
    ></v-text-field>

  </v-col>
<v-col cols="12" lg="4">
      <!--   <v-text-field
      v-model="Clavecasedit"
      
      :counter="300"
      :clearable="true"
      label="Clave de casa editorial"
      required
      
      
    ></v-text-field> -->
    <v-select
      v-model="Clavecasedit"
      :items="items"
      name="Clavecasedit"
      :rules="rulesRequeridas"
      label="Clave de casa editorial"
      required
      
      

      :item-text="function(item){return item.Clavecasedit+'-'+item.Desccasedit}"
      :item-value="function(item){ return item}"
  
    ></v-select>
</v-col>
<v-col cols="12" lg="4">
      <v-text-field
      v-model="Titulo"
      name="Titulo"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="Titulo"
      required
      
      
    ></v-text-field>
</v-col>
</v-row>
<v-row>
<v-col cols="12" lg="4">
    <v-text-field
      v-model="Autor"
      name="Autor"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="Autor"
      required
      
      
    ></v-text-field>
  </v-col>
  <v-col cols="12" lg="4">
   <v-text-field
      v-model="ClaveInterna"
      name="ClaveInterna"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="ClaveInterna"
      required
      
      
    ></v-text-field>
  </v-col>
  <v-col cols="12" lg="4">
<v-text-field
      v-model="ISBN"
      name="ISBN"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="ISBN"
      required
      
      
    ></v-text-field>
  </v-col>
</v-row>
<!-- <v-text-field
      v-model="Inventariable"
      
      :counter="300"
      :clearable="true"
      label="Name"
      required
      
      
    ></v-text-field> -->
    <v-row>
    <v-col cols="12" lg="4">
 <v-checkbox v-model="Inventariable" name="Inventariable" label="Inventariable" :rules="rulesRequeridas"></v-checkbox>
 
</v-col>

<!-- <v-text-field
      v-model="Claveunimed"
      
      :counter="300"
      :clearable="true"
      label="Clave de unidad de medida"
      required
      
      
    ></v-text-field> -->
<v-col cols="12" lg="4">
    <v-select
      v-model="Claveunimed"
      :items="medidas"
      name="Claveunimed"
      :rules="rulesRequeridas"
      label="Clave de unidad de medida"
      required
      :item-text="function(item){return item.Clavemed+'-'+item.Descmed}"
      :item-value="function(item){ return item}"
  
    ></v-select>
  </v-col>
<v-col cols="12" lg="4">



<v-text-field
      v-model="Existencia"
      name="Existencia"
      :rules="rulesRequeridas"
      :counter="32"
      :clearable="true"
      label="Existencia"
      required
      v-mask="cantidad"
      
    ></v-text-field>
  </v-col>
</v-row>
<v-row>
  <v-col cols="12" lg="4">
<!-- punto de orden para saber cuando pedir mas -->
<v-text-field
      v-model="Puntoreorden"
      name="Puntoreorden"
      :rules="rulesRequeridas"
      :counter="32"
      :clearable="true"
      label="Punto de orden"
      required
      v-mask="cantidad"
      
    ></v-text-field>
  </v-col>
  <v-col cols="12" lg="4">
<!-- costo  -->
<v-text-field
      v-model="Costo"
      name="Costo"
      :rules="rulesRequeridasNumero"
      ref="Costo"
      :counter="300"
      
      label="Costo"
      required
      v-money="money"
      
      
    ></v-text-field>
  </v-col>
  <v-col cols="12" lg="4">
    <!-- precio con el que se va a vender -->
<v-text-field
      v-model="Preciolista"
      name="Preciolista"
      :rules="rulesRequeridasNumero"
      ref="Preciolista"
      :counter="300"
     
      label="Precio de lista"
      required
       v-money="money"
      
      
    ></v-text-field>
  </v-col>
</v-row>
<v-row>
  <v-col cols="12" lg="4">
    <v-text-field
      v-model="Peso"
      ref="Peso"
      name="Peso"
      :rules="rulesRequeridasNumero"
      prefix="KG"
      :counter="300"
     
      label="Peso"
      required
       v-money="money"
      
      
    ></v-text-field>
  </v-col>
<v-col cols="12" lg="4">
    <v-text-field
      v-model="Numeropag"
      name="Numeropag"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="# Paginas"
      required
      v-mask="cantidad"
      
    ></v-text-field>
  </v-col>
  <v-col cols="12" lg="4">
 <v-text-field
      v-model="Ubicacion"
      name="Ubicacion"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="Ubicacion"
      required
      
      
    ></v-text-field>
</v-col>
<!--    <v-text-field
      v-model="fechaColofon"
      
      :counter="300"
      :clearable="true"
      label="Fecha de edicion"
      required
      
      
    ></v-text-field> -->

</v-row>
<v-row>
  <v-col cols="12" lg="4">
   <v-text-field
      v-model="Tema"
      name="Tema"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="Tema"
      required
      
      
    ></v-text-field>
  </v-col>
        <v-col cols="12" lg="4">
  <v-text-field
      v-model="Sinopsis"
      name="Sinopsis"
      :rules="rulesRequeridas"
      :counter="300"
      :clearable="true"
      label="Sinopsis"
      required
      
      
    ></v-text-field>
</v-col>

<!--    <v-text-field
      v-model="fecalta"
      
      :counter="300"
      :clearable="true"
      label="Name"
      required
      
      
    ></v-text-field> -->





<v-col cols="12" lg="4">

   <v-text-field
      v-model="Descuento"
      name="Descuento"
      :rules="rulesRequeridasNumero"
      ref="Descuento"
      :counter="300"
  
      label="Descuento"
      required
      prefix="$"
       v-money="money"
      
    ></v-text-field>
  </v-col>
  </v-row>
<!--   <v-text-field
      v-model="Ultimoprov"
      
      :counter="300"
      :clearable="true"
      label="Ultimoprov"
      required
      
      
    ></v-text-field> -->
    <v-row>

<!--  <v-text-field
      v-model="Usralta"
      
      :counter="300"
      :clearable="true"
      label="Name"
      required
      
      
    ></v-text-field> -->
<!--  <v-text-field
      v-model="fotoportada"
      
      :counter="300"
      :clearable="true"
      label="FotoPortada"
      required
      
      
    ></v-text-field>
 -->
     <v-col cols="12" lg="4">
        <v-menu
          v-model="menu1"
          :close-on-content-click="false"
          transition="scale-transition"
          offset-y
          max-width="290px"
          min-width="290px"
        >
          <template v-slot:activator="{ on }">
            <v-text-field
              v-model="computedDateFormatted1"
              label="Fecha Colofon"
          
              persistent-hint
              clearable
              prepend-icon="event"
              readonly
              v-on="on"
            ></v-text-field>
          </template>
          <v-date-picker v-model="fechaColofon" name="fechaColofon"  @input="menu1 = false"></v-date-picker>
        </v-menu>
        <!-- <p>Date in ISO format: <strong>{{ fecalta }}</strong></p> -->
      </v-col>
  <v-col cols="12" lg="4">
        <v-menu
          v-model="menu2"
          :close-on-content-click="false"
          transition="scale-transition"
          offset-y
          max-width="290px"
          min-width="290px"
        >
          <template v-slot:activator="{ on }">
            <v-text-field
              v-model="computedDateFormatted"
              label="Fecha Alta"
           
              persistent-hint
              clearable
              prepend-icon="event"
              readonly
              v-on="on"
            ></v-text-field>
          </template>
          <v-date-picker v-model="fecalta" name="fecalta" no-title  @input="menu2 = false"></v-date-picker>
         
        </v-menu>
        <!-- <p>Date in ISO format: <strong>{{ fecalta }}</strong></p> -->
      </v-col>
 
</v-row>
<v-row>
  <v-col cols="12" lg="4">
 <v-file-input 
 show-size label="Foto Portada"   
 v-model="fotoportada"
  :rules="rules"
  ref="fotoportada"
    accept="image/png, image/jpeg, image/bmp"
    placeholder="escoge una imagen"
    prepend-icon="mdi-camera"
    name="fotoportada"
 

     
 ></v-file-input>
</v-col>
<v-col>
  <v-avatar
            class="profile"
            color="grey"
            size="500"
            tile
            v-if="fotoCargada"

          >

            <v-img  v-bind:src="fotourl" ref="fotoCargada" id="fotoCargada"></v-img>
          </v-avatar>
</v-col>
</v-row>

    <v-btn class="mr-4" @click="submit">Guardar</v-btn>
    <v-btn @click="clear">Limpiar</v-btn>
  </v-form>
</template>

<script>
 import { validationMixin } from 'vuelidate'
  import { required, maxLength, email } from 'vuelidate/lib/validators'
 import {VMoney} from 'v-money'
import {mask} from 'vue-the-mask'

  export default {
    mixins: [validationMixin],
props:['show'],
    validations: {
      name: { required, maxLength: maxLength(10) },
      email: { required, email },
      select: { required },
      checkbox: {
        checked (val) {
          return val
        },
      },
    },
       directives: {money: VMoney,mask: mask},
    

    data: vm => ({
      rules: [
        value => !value || value.size < 2000000 || 'max 2 MB!',
      ],
rulesRequeridas: [
        value => !!value || 'Requerido.',
        value => (value && value.length >= 3) || 'Min 3 ',
      ],
      rulesRequeridasNumero: [
        value => !!value || 'Requerido.',
        value => (value && value>0.00) || 'Min 1',
      ],
      ok:false,

        date: new Date().toISOString().substr(0, 10),
      dateFormatted: vm.formatDate(new Date().toISOString().substr(0, 10)),
      menu1: false,
      menu2: false,

valid:true,
      name: '',
      email: '',
      select: null,
      items: [],
      checkbox: false,
      id_libro: '',

money: {
          decimal: '.',
          thousands: '',
          prefix: '',
          suffix: '',
          precision: 2,
          masked: false
        },
cantidad:'################################',

Codbarras:'',

Clavecasedit:'',

Titulo:'',

Autor:'',

ClaveInterna:'',

ISBN:'',

Inventariable:false,

Claveunimed:'',
medidas:[],

  Existencia:'',

  Puntoreorden:'',

  Costo:0.00,

  Preciolista:0.00,

  Peso:0.00,

  Numeropag:0,

  fechaColofon:'',

  Tema:'',

  fecalta:'',

  Descuento:0.00,

  Ultimoprov:'',

  Sinopsis  :'',

  Ubicacion:'',

  Usralta:'',

  fotoportada:{},
  fotoCargada:false,
  fotourl:"",
    }),

    computed: {
      checkboxErrors () {
        const errors = []
        if (!this.$v.checkbox.$dirty) return errors
        !this.$v.checkbox.checked && errors.push('You must agree to continue!')
        return errors
      },
      selectErrors () {
        const errors = []
        if (!this.$v.select.$dirty) return errors
        !this.$v.select.required && errors.push('Item is required')
        return errors
      },
      nameErrors () {
        const errors = []
        if (!this.$v.name.$dirty) return errors
        !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
        !this.$v.name.required && errors.push('Name is required.')
        return errors
      },
      emailErrors () {
        const errors = []
        if (!this.$v.email.$dirty) return errors
        !this.$v.email.email && errors.push('Must be valid e-mail')
        !this.$v.email.required && errors.push('E-mail is required')
        return errors
      },
       computedDateFormatted : {
    
     get: function () {
     return this.formatDate(this.fecalta)
    },
    // setter
    set: function (newValue) {
      this.fecalta=""
    }
              

          
      
      },
       computedDateFormatted1 : {

         get: function () {
      return this.formatDate(this.fechaColofon)
    },
    // setter
    set: function (newValue) {
      this.fechaColofon= ""
    }
         
             
          
        
      },
    },
     watch: {
      fecalta (val) {
        this.dateFormatted = this.formatDate(this.fecalta)
      },
       fotoportada(val) {

let self=this;    
if( val!=undefined)
{
   
 
            var reader = new FileReader();
          
            
            reader.onload = function (e) {
              console.log(e.target.result);

              self.fotourl=e.target.result;
                self.fotoCargada=true;
               
            }
            
            reader.readAsDataURL(val);
        
}else{
  this.fotoCargada=false
}
       
    }
    },


    methods: {
      submit () {
                // let form = document.getElementById('form');
                
   if (this.$refs.form.validate()) {
let data= new FormData();

data.append('id_libro', this.id_libro)

data.append('Codbarras',this.Codbarras)

data.append('Clavecasedit', this.Clavecasedit.hasOwnProperty("id_casaEditorial") ? this.Clavecasedit.id_casaEditorial :this.Clavecasedit )

data.append('Titulo',this.Titulo)

data.append('Autor',this.Autor)

data.append('ClaveInterna',this.ClaveInterna)

data.append('ISBN',this.ISBN)

data.append('Inventariable',this.Inventariable)

data.append('Claveunimed', this.Claveunimed.hasOwnProperty("id_medida") ? this.Claveunimed.id_medida : this.Claveunimed )

  data.append('Existencia',this.Existencia)

  data.append('Puntoreorden',this.Puntoreorden)

  data.append('Costo',this.Costo)

  data.append('Preciolista',this.Preciolista)

  data.append('Peso',this.Peso)

  data.append('Numeropag',this.Numeropag)

  data.append('fechaColofon',this.fechaColofon)

  data.append('Tema',this.Tema)

  data.append('fecalta',this.fecalta)

  data.append('Descuento',this.Descuento)

  data.append('Ultimoprov',this.Ultimoprov)

  data.append('Sinopsis',this.Sinopsis  )

  data.append('Ubicacion',this.Ubicacion)

  data.append('Usralta',this.Usralta)

  data.append('fotoportada',this.fotoportada)



  const config = {
            headers: { 'content-type': 'multipart/form-data' }
        }

                        axios.post('/guardarLibro',data,config )
                            .then(function (response) {
                             console.log(response);
                            })
                            .catch(function (error) {
                      console.log(error);
                            });
                          }
      },
      handleFileUpload(){
        console.log(this.$refs.fotoportada);
    this.fotoportada = this.$refs.fotoportada.files[0];
  },
       validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
        }
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
      clear () {
                this.$refs.form.reset()
                  this.$refs.form.resetValidation()
//               this.id_libro= '';

// this.Codbarras='';

// this.Clavecasedit='';

// this.Titulo='';

// this.Autor='';

// this.ClaveInterna='';

// this.ISBN='';

// this.Inventariable=false;

// this.Claveunimed='';

//   this.Existencia='';

//   this.Puntoreorden='';

//   this.Costo='';

//   this.Preciolista='';

//   this.Peso='';

//   this.Numeropag='';

//   this.fechaColofon='';

//   this.Tema='';

//   this.fecalta='';

//   this.Descuento='';

//   this.Ultimoprov='';

//   this.Sinopsis  ='';

//   this.Ubicacion='';

//   this.Usralta='';

//   this.fotoportada={};

    this.$refs.Costo.$el.getElementsByTagName('input')[0].value = 0;
    this.$refs.Preciolista.$el.getElementsByTagName('input')[0].value = 0;
    this.$refs.Peso.$el.getElementsByTagName('input')[0].value = 0;
    this.$refs.Descuento.$el.getElementsByTagName('input')[0].value = 0;
      },
      obtenerMedidas(){
        let self=this;
  axios.get('/obtenerMedidas' )
                            .then(function (response) {
                             console.log(response.data.medidas);





                             if (response.data.medidas.length > 0) 
                             {




  for (let i = response.data.medidas.length - 1; i >= 0; i--) {
                                    let nearray = [];
                                    nearray['id_medida'] = response.data.medidas[i].id_medida;
                                    nearray['Clavemed'] = response.data.medidas[i].Clavemed;
                                    nearray['Descmed'] = response.data.medidas[i].Descmed;
                                    


                                    self.medidas.push(nearray);
                                }


                             }
                            })
                            .catch(function (error) {
                      console.log(error);
                            });
      },
      obtenerEditoriales(){
// obtenerCasaEditorialToda
let self=this;
  axios.get('/obtenerEditorial' )
                            .then(function (response) {
                             console.log(response.data.editorial);





                             if (response.data.editorial.length > 0) 
                             {

  for (let i = response.data.editorial.length - 1; i >= 0; i--) {
                                    let nearray = [];
                                    nearray['id_casaEditorial'] = response.data.editorial[i].id_casaEditorial;
                                    nearray['Clavecasedit'] = response.data.editorial[i].Clavecasedit;
                                    nearray['Desccasedit'] = response.data.editorial[i].Desccasedit;
                                    


                                    self.items.push(nearray);
                                }


                             }
                            })
                            .catch(function (error) {
                      console.log(error);
                            });
      },

        formatDate (date) {
        if (!date) return null

        const [year, month, day] = date.split('-')
        return `${month}/${day}/${year}`
      },
      parseDate (date) {
        if (!date) return null

        const [month, day, year] = date.split('/')
        return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`
      },
    },
     mounted() {
            window.vm = this;
this.obtenerEditoriales()
this.obtenerMedidas();
        }
  }
</script>
