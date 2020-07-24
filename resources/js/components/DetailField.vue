<template>
    <div class="flex flex-wrap border-b border-40">
        <div class="w-1/4 py-4">
            <slot>
                <h4 class="font-normal text-80">{{ label }}</h4>
            </slot>
        </div>
        <div class="w-3/4 py-4 break-words">
            <slot name="value">
                <p class="text-90">
                    {{ count }}
                </p>
            </slot>
        </div>

        <div class="w-full pb-4" v-if="count">
            <table class="table w-full break-words">
                <thead>
                <tr>
                    <th class="text-left">ID</th>
                    <th class="text-left" v-for="heading in headings">
                        {{ heading }}
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(row, id) in values">
                    <td>{{ id }}</td>
                    <td v-for="column in row">
                        {{ column}}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
        computed: {
            values() {
                return this.field.value === null ? [] : this.field.value;
            },

            label() {
                return this.fieldName || this.field.name
            },

            headings() {
                let firstKey = Object.keys(this.values)[0];
                return Object.keys(this.values[firstKey]);
            },

            count() {
                return Object.keys(this.values).length;
            }
        }
    }
</script>
