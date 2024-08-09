<template>
    <div
        class="flex flex-col md:flex-row -mx-6 px-6 py-2 md:py-0 space-y-2 md:space-y-0"
        dusk="mapbox_field_1"
    >
        <div class="md:w-1/4 md:py-3">
            <h4>
                <span>{{ field.name }}</span>
            </h4>
        </div>
        <div class="md:w-3/4 md:py-3 break-all lg:break-words">
            <div v-html="field.content" />
        </div>
    </div>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>
