Procedure viewProductDetail(item-id: integer);
var
    product = record
        item-id : integer;
        name : string;
        price : integer;
        description : string;
    end;
begin
    if (item-id exists in product database) then
        write(product.name, product.price, product.description);
    else
        write('Error: Product not found.');
    end if;
end;
