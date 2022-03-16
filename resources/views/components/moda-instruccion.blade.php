<x-adminlte-modal id="{{ $id }}" title="{{ $titulo }}" theme="info" icon="fas fa-info" v-centered
    scrollable>
    <!-- body modal -->
    <section>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio non vitae facere velit sequi ducimus officia odit
        repellat voluptas enim! Suscipit perspiciatis dolorum sequi nesciunt maxime labore, fugit consequatur natus?
    </section>

    <!-- footer modal -->
    <x-slot name="footerSlot">
        <!-- bottones modal -->
        <x-adminlte-button theme="danger" label="Cerrar" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>
