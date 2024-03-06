import './bootstrap';
import Alpine from 'alpinejs';
import 'flowbite';
import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input });


window.Alpine = Alpine;

Alpine.start();

import { Datepicker, Input } from "tw-elements";

const myInput = new Input(document.getElementById("myDatepicker"));
const options = {
  format: "dd-mm-yyyy",
};
const myDatepicker = new Datepicker(
  document.getElementById("myDatepicker"),
  options
);