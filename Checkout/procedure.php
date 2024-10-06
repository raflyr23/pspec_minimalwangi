Procedure checkout(user-id: integer ; total-amount: integer);
var
    order-status : string;
    payment-status : string;
    user = record
        id : integer;
        balance : integer;
    end;
begin
    if (user.balance >= total-amount) then
        order-status := 'Confirmed';
        payment-status := 'Paid';
        user.balance := user.balance - total-amount;
    else
        write('Error: Insufficient balance.');
    end if;
end;
