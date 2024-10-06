Procedure addToCart(user-id: integer ; item-id: integer ; quantity: integer);
var
    cart = record
        user-id : integer;
        item-id : integer;
        quantity : integer;
    end;
begin
    if (item-id is available in stock) then
        cart.user-id := user-id;
        cart.item-id := item-id;
        cart.quantity := quantity;
    else
        write('Error: Item out of stock.');
    end if;
end;
