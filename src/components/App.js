import { defineComponent } from "vue";
import './App.css';
import draggable from "vuedraggable";

const listA = [
    'A',
    'B',
    'C',
    'D',
];

const listB = [
    'E',
    'F',
    'G',
    'H',
];

export default defineComponent({

    data() {
        return {
            listA,
            listB,
            drag: false,
        };
    },
    components: {
        draggable,
    }
});
